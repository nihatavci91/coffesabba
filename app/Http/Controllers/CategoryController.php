<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(15);

        return view('panel.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $categories = Category::where('parent_id', 0)->get();

        return view('panel.categories.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'short' => 'required',
            'parent_id' => 'nullable|exists:categories,id',
            'status' => 'required|in:1,0'
        ]);

        if (empty($validated['parent_id'])) {
            $validated['parent_id'] = 0;
        }

        $category = Category::create($validated);

        return redirect()->route('category.edit', ['category' => $category])
            ->with('successMessage', 'Kategori Başarı İle Oluşturuldu');
    }

    public function edit(Category $category)
    {
        $categories = Category::where('parent_id', 0)->where('id', '!=', $category->id)->get();

        return view('panel.categories.edit', [
            'categories' => $categories,
            'category' => $category
        ]);
    }

    public function update(Category $category, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'short' => 'required',
            'parent_id' => 'nullable|exists:categories,id',
            'status' => 'required|in:1,0'
        ]);

        if (empty($validated['parent_id'])) {
            $validated['parent_id'] = 0;
        }

        $category->update($validated);

        return redirect()->route('category.edit', ['category' => $category])
            ->with('successMessage', 'Kategori Başarı İle Güncellendi');;
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')
            ->with('deleteSuccess', 'Kategori Başarı ile Silindi');
    }
}
