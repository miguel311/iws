<?php

use Illuminate\Database\Seeder;
use App\PersonIntegrityPlan;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		/* Plan Salud */
		$plan = new PersonIntegrityPlan();

		$plan->name = "Plan 1 de prueba";
		$plan->description = "Plan de prueba description"; 
		$plan->coverage = "200"; 
		$plan->price = "20"; 
		$plan->deductible = "0"; 
		$plan->save();
    }
}
