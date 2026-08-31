<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('backend.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('backend.portfolio.create');
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'portfolio_image' => 'required|image',
        // ]);
        $image_path = null;
        if ($request->hasFile('portfolio_image')) {
            $image_path = $request->file('portfolio_image')->store('portfolio_images', 'public');
        }

        Portfolio::create([

            'portfolio_title' => $request->portfolio_title,
            'portfolio_slug' => Str::slug($request->portfolio_slug ?? $request->portfolio_title),
            'description' => $request->description,
            'status' => $request->status,
            'portfolio_image' => $image_path,

        ]);
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio created successfully!');
    }

    public function show(int $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.portfolio.show', compact('portfolio'));;
    }

    public function edit(int $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, int $id)
    {
        // $request->validate([
        //     'portfolio_image' => 'required|image',
        // ]);
        $portfolio = Portfolio::findOrFail($id);
        $image_path = $portfolio->portfolio_image;

        if ($request->hasFile('portfolio_image')) {
            $image_path = $request->file('portfolio_image')->store('portfolio_images', 'public');
        }

        $portfolio->update([

            'portfolio_title' => $request->portfolio_title,
            'portfolio_slug' => Str::slug($request->portfolio_slug ?? $request->portfolio_title),
            'description' => $request->description,
            'status' => $request->status,
            'portfolio_image' => $image_path,

        ]);
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio updated Successfully!');
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $portfolio = Portfolio::findOrFail($id);
            $image_path = $portfolio->portfolio_image;
            if ($image_path && Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }

            $portfolio->delete();
            DB::commit();
            return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio deleted Successfully!');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error('Error deleting Portfolio', [$th->getMessage() . '-' . $th->getLine()]);
            return redirect()->route('admin.portfolio.index')->with('success', 'Something went Wrong!');
        }
    }
}
