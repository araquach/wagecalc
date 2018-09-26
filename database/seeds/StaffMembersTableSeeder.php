<?php

use Illuminate\Database\Seeder;

class StaffMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_members')->insert([
            'id' => '1',
            'first_name' => '',
            'last_name' => '',
            'birth_date' => '',
            'salon' => '',
            'position' => '',
            'holiday_entitlemant' => '',
            'basic_wage' => '',
            'hours_pd' => '',
            'days_pw' => '',
            'target_multiplier' => '',
            'commission_value' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('staff_members')->insert([
            'id' => '2',
            'first_name' => '',
            'last_name' => '',
            'birth_date' => '',
            'salon' => '',
            'position' => '',
            'holiday_entitlemant' => '',
            'basic_wage' => '',
            'hours_pd' => '',
            'days_pw' => '',
            'target_multiplier' => '',
            'commission_value' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('staff_members')->insert([
            'id' => '3',
            'first_name' => '',
            'last_name' => '',
            'birth_date' => '',
            'salon' => '',
            'position' => '',
            'holiday_entitlemant' => '',
            'basic_wage' => '',
            'hours_pd' => '',
            'days_pw' => '',
            'target_multiplier' => '',
            'commission_value' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
