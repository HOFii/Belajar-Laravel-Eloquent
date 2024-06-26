<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        DB::delete("delete from categories");
        DB::delete("data from vouchers");
        DB::delete("data from comments");
        DB::delete("data from wallets");
        DB::delete("data from customers");
    }
}
