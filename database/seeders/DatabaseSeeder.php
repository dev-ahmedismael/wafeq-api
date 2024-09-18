<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\AccountCategory;
use App\Models\TaxRate;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Account Categories
        $account_categories = [
            [
                'title' => 'دخل',
                'class' => 'إيرادات',
                'editable' => false
            ],
            [
                'title' => 'مصادر دخل أخرى',
                'class' =>
                'إيرادات',
                'editable' => false
            ],
            [
                'title' => 'المصروفات التشغيلية',
                'class' =>
                'مصروفات',
                'editable' => false
            ],
            [
                'title' => 'المصروفات الغير تشغيلية',
                'class' =>
                'مصروفات',
                'editable' => false
            ],
            [
                'title' => 'تكاليف المبيعات',
                'class' =>
                'مصروفات',
                'editable' => false
            ],
            [
                'title' => 'الأصول الثابتة',
                'class' =>
                'الأصول',
                'editable' => false
            ],
            [
                'title' => 'الأصول الغير متداولة',
                'class' =>
                'الأصول',
                'editable' => false
            ],
            [
                'title' => 'الأصول المتداولة',
                'class' =>
                'الأصول',
                'editable' => false
            ],
            [
                'title' => 'النقد وما يعادله',
                'class' =>
                'الأصول',
                'editable' => false
            ],
            [
                'title' => 'أسهم الخزينة',
                'class' =>
                'حقوق الملكية',
                'editable' => false
            ],
            [
                'title' => 'الأرباح المحتجزة',
                'class' =>
                'حقوق الملكية',
                'editable' => false
            ],
            [
                'title' => 'الدخل الشامل الآخر المتراكم',
                'class' =>
                'حقوق الملكية',
                'editable' => false
            ],
            [
                'title' => 'حقوق ملكية المالك',
                'class' =>
                'حقوق الملكية',
                'editable' => false
            ],
            [
                'title' => 'حقوق ملكية من رصيد إفتتاحي',
                'class' =>
                'حقوق الملكية',
                'editable' => false
            ],
            [
                'title' => 'رأس المال',
                'class' =>
                'حقوق الملكية',
                'editable' => false
            ],
            [
                'title' => 'الإلتزامات المتداولة',
                'class' =>
                'إلتزامات',
                'editable' => false
            ],
            [
                'title' => 'الإلتزامات الغير متداولة',
                'class' =>
                'إلتزامات',
                'editable' => false
            ],
        ];

        foreach ($account_categories as $category) {
            AccountCategory::create($category);
        }

        // Create Accounts

        $accounts = [
            [
                'account_category_id' => 9,
                'code' => 100,
                'account_name' => 'الخزينة',
                'type' => 'النقد وما يعادله',
                'activity' => 'نقد',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 1,
                'editable' => false
            ],
            [
                'account_category_id' => 9,
                'code' => 103,
                'account_name' => 'المصروفات النثرية',
                'type' => 'النقد وما يعادله',
                'activity' => 'نقد',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false
            ],
            [
                'account_category_id' => 9,
                'code' => 105,
                'account_name' => 'الحساب البنكي',
                'type' => 'النقد وما يعادله',
                'activity' => 'نقد',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false
            ],
            [
                'account_category_id' => 8,
                'code' => 101,
                'account_name' => 'حسابات مستحقة القبض',
                'type' => 'الأصول المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 8,
                'code' => 104,
                'account_name' => 'عهد الموظفين',
                'type' => 'الأصول المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 8,
                'code' => 106,
                'account_name' => 'مصروفات مدفوعة مقدماً',
                'type' => 'الأصول المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 8,
                'code' => 108,
                'account_name' => 'إدارة المخزون',
                'type' => 'الأصول المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 8,
                'code' => 109,
                'account_name' => 'المستودع الرئيسي',
                'type' => 'الأصول المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 6,
                'code' => 102,
                'account_name' => 'أثاث ومعدات',
                'type' => 'الأصول الثابتة',
                'activity' => 'الاستثمارات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 6,
                'code' => 107,
                'account_name' => 'مجمع الإهلاك التراكمي',
                'type' => 'الأصول الثابتة',
                'activity' => 'الاستثمارات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 200,
                'account_name' => 'حسابات مستحقة الدفع',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 201,
                'account_name' => 'إيراد غير مكتسب',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 202,
                'account_name' => 'تعديلات الرصيد الإفتتاحي',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التمويلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 203,
                'account_name' => 'الأجور المستحقة الدفع',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 204,
                'account_name' => 'قرض من المالك',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التمويلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 205,
                'account_name' => 'تعويضات الموظفين',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 206,
                'account_name' => 'تقريب',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 208,
                'account_name' => 'القيمة المضافة',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 209,
                'account_name' => 'ضريبة السلع الانتقائية المستحقة',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 210,
                'account_name' => 'ضريبة القيمة المضافة على الحسابات الدائنة',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 16,
                'code' => 211,
                'account_name' => 'زكاة مستحقة الدفع',
                'type' => 'الإلتزامات المتداولة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 12,
                'code' => 304,
                'account_name' => 'أرباح و خسائر غير محققة',
                'type' => 'الدخل الشامل الآخر المتراكم',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 14,
                'code' => 302,
                'account_name' => 'إزاحة الرصيد الافتتاحي',
                'type' => 'حقوق ملكية من رصيد افتتاحي',
                'activity' => 'التمويلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 13,
                'code' => 301,
                'account_name' => 'حقوق ملكية المالك',
                'type' => 'حقوق ملكية المالك',
                'activity' => 'التمويلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 13,
                'code' => 302,
                'account_name' => 'المسحوبات',
                'type' => 'حقوق ملكية المالك',
                'activity' => 'التمويلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 1,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 11,
                'code' => 300,
                'account_name' => 'الأرباح المحتجزة',
                'type' => 'الأرباح المحتجزة',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 1,
                'code' => 400,
                'account_name' => 'إيرادات مسك الدفاتر',
                'type' => 'دخل',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 1,
                'code' => 401,
                'account_name' => 'إيرادات تدقيق',
                'type' => 'دخل',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 1,
                'code' => 402,
                'account_name' => 'إيرادات إستشارات ضريبية',
                'type' => 'دخل',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 1,
                'code' => 403,
                'account_name' => 'إيرادات إعداد برامج المحاسبة',
                'type' => 'دخل',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 1,
                'code' => 404,
                'account_name' => 'إيرادات إستشارات',
                'type' => 'دخل',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 1,
                'code' => 405,
                'account_name' => 'إيرادات تدريب',
                'type' => 'دخل',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 1,
                'code' => 406,
                'account_name' => 'مبيعات أخرى',
                'type' => 'دخل',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 1,
                'code' => 407,
                'account_name' => 'خصم',
                'type' => 'دخل',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 5,
                'code' => 500,
                'account_name' => 'رواتب المحاسبين',
                'type' => 'تكاليف المبيعات',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 5,
                'code' => 501,
                'account_name' => 'تكلفة البضائع المباعة',
                'type' => 'تكاليف المبيعات',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 600,
                'account_name' => 'مصروفات برامج المحاسبة',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 601,
                'account_name' => 'اللوازم المكتبية',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 602,
                'account_name' => 'الإعلان والتسويق',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 603,
                'account_name' => 'الرسوم الإضافية البنكية والمصاريف',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 604,
                'account_name' => 'رسوم بطاقات الائتمان',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 606,
                'account_name' => 'تكاليف السفر',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 1,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 607,
                'account_name' => 'مصروفات الهاتف',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 1,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 608,
                'account_name' => 'البرامج والأدوات',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 609,
                'account_name' => 'مصروف الإيجار',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 610,
                'account_name' => 'مصروفات الماء والكهرباء',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 611,
                'account_name' => 'دين معدوم',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 612,
                'account_name' => 'رواتب وأجور الموظفين',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 614,
                'account_name' => 'الوجبات والترفيه',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 1,
                'editable' => false

            ],
            [
                'account_category_id' => 3,
                'code' => 616,
                'account_name' => 'الإصلاحات والصيانة',
                'type' => 'المصروفات التشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 4,
                'code' => 605,
                'account_name' => 'خسارة أو ربح في صرف العملات',
                'type' => 'المصروفات الغير تشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 4,
                'code' => 613,
                'account_name' => 'غير مصنف',
                'type' => 'المصروفات الغير تشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 4,
                'code' => 615,
                'account_name' => 'مصاريف الإهلاك',
                'type' => 'المصروفات الغير تشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 0,
                'editable' => false

            ],
            [
                'account_category_id' => 4,
                'code' => 617,
                'account_name' => 'المصاريف الآخرى',
                'type' => 'المصروفات الغير تشغيلية',
                'activity' => 'التشغيلات',
                'debit' => 0,
                'credit' => 0,
                'enable_payments' => 0,
                'show_in_expense_claim' => 1,
                'editable' => false

            ],
        ];

        foreach ($accounts as $account) {
            Account::create($account);
        }

        // Create Tax Rate
        $tax_rates = [
            [
                'name' => 'غير خاضع للضريبة',
                'tax_type' => 'غير خاضع للضريبة',
                'tax_rate' => 0,
                'description' => 'غير خاضع للضريبة',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
            [
                'name' => 'إحتساب عكسي',
                'tax_type' => 'إحتساب عكسي',
                'tax_rate' => 15,
                'description' => 'إحتساب عكسي (السعودية)',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
            [
                'name' => 'مشتريات معفاة من الضربية',
                'tax_type' => 'مشتريات',
                'tax_rate' => 0,
                'description' => 'مشتريات معفاة من الضربية (السعودية)',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
            [
                'name' => 'مشتريات بنسبة صفر',
                'tax_type' => 'مشتريات',
                'tax_rate' => 0,
                'description' => 'المشتريات الخاضعة للضريبة بنسبة صفر (السعودية)',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
            [
                'name' => 'ضريبة القيمة المضافة في الجمارك',
                'tax_type' => 'مشتريات',
                'tax_rate' => 15,
                'description' => 'ضريبة القيمة المضافة المدفوعة للجمارك (السعودية)',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
            [
                'name' => 'ضريبة القيمة المضافة على مشتريات',
                'tax_type' => 'مشتريات',
                'tax_rate' => 15,
                'description' => 'ضريبة القيمة المضافة على المستوردات (السعودية)',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
            [
                'name' => 'معفى',
                'tax_type' => 'مبيعات',
                'tax_rate' => 0,
                'description' => 'توريد معفى عن ضريبة القيمة المضافة (السعودية)',
                'tax_exemption_reason' => 'الخدمات المالية',
                'editable' => false

            ],
            [
                'name' => 'صادرات',
                'tax_type' => 'مبيعات',
                'tax_rate' => 0,
                'description' => 'الصادرات الخاضعة للضريبة بنسبة صفر (السعودية)',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
            [
                'name' => 'توريدات داخل المملكة خاضعة للضريبة بنسبة صفر',
                'tax_type' => 'مبيعات',
                'tax_rate' => 0,
                'description' => 'توريدات داخل المملكة خاضعة للضريبة بنسبة صفر',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
            [
                'name' => 'ضريبة القيمة المضافة على الإيرادات',
                'tax_type' => 'مبيعات',
                'tax_rate' => 15,
                'description' => 'ضريبة القيمة المضافة على التوريدات (السعودية)',
                'tax_exemption_reason' => null,
                'editable' => false

            ],
        ];

        foreach ($tax_rates as $tax_rate) {
            TaxRate::create($tax_rate);
        }
    }
}
