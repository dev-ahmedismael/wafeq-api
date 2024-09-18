<?php

declare(strict_types=1);

use App\Http\Controllers\AccountCategoryController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CostCenterController;
use App\Http\Controllers\QuotesAndProformasController;
use App\Http\Controllers\TaxRateController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Illuminate\Http\Request;
use Stancl\Tenancy\Middleware\InitializeTenancyByRequestData;




foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('profile-information', [AuthController::class, 'set_profile_information']);
        Route::post('company-information', [AuthController::class, 'set_company_information']);
    });
}

Route::middleware([
    InitializeTenancyByRequestData::class,
    // PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::apiResource('quotes-and-proformas', QuotesAndProformasController::class);

    Route::apiResource('cost-centers', CostCenterController::class);
    Route::post('cost-centers/search', [CostCenterController::class, 'search']);
    Route::post('cost-centers/sort-filter', [CostCenterController::class, 'sort_filter']);

    Route::apiResource('tax-rates', TaxRateController::class);
    Route::post('tax-rates/search', [TaxRateController::class, 'search']);
    Route::post('tax-rates/sort', [TaxRateController::class, 'sort']);
    Route::post('tax-rates/filter', [TaxRateController::class, 'filter']);

    Route::apiResource('chart-of-accounts', AccountController::class);
    Route::post('chart-of-accounts/search', [AccountController::class, 'search']);
    Route::post('chart-of-accounts/sort', [AccountController::class, 'sort']);
    Route::post('chart-of-accounts/filter', [AccountController::class, 'filter']);

    Route::apiResource('account-categories', AccountCategoryController::class);
});
