<?php

namespace App\Http\Controllers;

use App\Models\CostCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CostCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CostCenter::paginate(2);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CostCenter::create($request->all());
        return response()->json(['message' => 'تم حفظ البيانات بنجاح.'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = CostCenter::find($id);
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CostCenter $costCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $account = CostCenter::find($id);
        $account->update($request->all());
        $account->save();
        return response()->json(['message' => 'تم التعديل بنجاح.'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CostCenter::destroy($id);
        return response()->json(['message' => 'تم الحذف بنجاح.'], 200);
    }

    // Search
    public function search(Request $request)
    {
        $query = $request->input('query'); // Get the search keyword

        $table = 'cost_centers';

        $columns = \Illuminate\Support\Facades\Schema::getColumnListing($table);

        // Start the query builder
        $search_results = DB::table($table)
            ->where(function ($q) use ($query, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'like', '%' . $query . '%');
                }
            })
            ->paginate(50);

        return response()->json($search_results, 200);
    }

    // Filter and Sort
    public function sort_filter(Request $request)
    {
        // Start building the query
        $query = CostCenter::query();

        // Dynamic filtering
        if ($request->has('filters')) {
            foreach ($request->filters as $filter) {
                $column = $filter['column'];
                $operator = $filter['operator'];
                $value = $filter['value'];

                if ($operator === 'BETWEEN') {
                    // Check if start date and end date are provided
                    if (isset($value['start']) && isset($value['end'])) {
                        // Filter for a range of dates
                        $query->whereBetween($column, [$value['start'], $value['end']]);
                    } elseif (isset($value['start'])) {
                        // If only the start date is provided, fetch all dates greater than or equal to the start date
                        $query->where($column, '>=', $value['start']);
                    }
                } else {
                    // Apply other filters based on operator
                    $query->where($column, $operator, $value);
                }
            }
        }

        // Dynamic sorting
        if ($request->has('sort_by') && $request->has('sort_direction')) {
            $query->orderBy($request->sort_by, $request->sort_direction);
        }

        // Pagination
        $data = $query->paginate(50);

        return response()->json($data, 200);
    }
}
