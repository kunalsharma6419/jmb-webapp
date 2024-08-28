<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'A K Pandey', 'email' => 'akpandey@jmbpackaging.com', 'password' => 'Akpandey@2024'],
            ['name' => 'CEO', 'email' => 'ceo@jmbpackaging.com', 'password' => 'CeoJMB@2024'],
            ['name' => 'A K Shrivastav', 'email' => 'akshrivastav@jmbpackaging.com', 'password' => 'Akshrivastav@2024'],
            ['name' => 'Prabhat', 'email' => 'prabhat@jmbpackaging.com', 'password' => 'Prabhat@2024'],
            ['name' => 'PPC Department', 'email' => 'ppc@jmbpackaging.com', 'password' => 'Ppc@2024'],
            ['name' => 'QC Department', 'email' => 'qc@jmbpackaging.com', 'password' => 'Qcc@2024'],
            ['name' => 'PDN Department', 'email' => 'pdn@jmbpackaging.com', 'password' => 'Pdn@2024'],
            ['name' => 'Sales Department', 'email' => 'sales@jmbpackaging.com', 'password' => 'SalesJMB@2024'],
            ['name' => 'Marketing Department', 'email' => 'mkt@jmbpackaging.com', 'password' => 'MktJMB@2024'],
            ['name' => 'Accounts Department', 'email' => 'account@jmbpackaging.com', 'password' => 'AccountJMB@2024'],
            ['name' => 'Purchase Department', 'email' => 'purchase@jmbpackaging.com', 'password' => 'PurchaseJMB@2024'],
            ['name' => 'Maintenance Department', 'email' => 'maint@jmbpackaging.com', 'password' => 'MaintJMB@2024'],
            ['name' => 'HR Department', 'email' => 'hr@jmbpackaging.com', 'password' => 'HrJMB@2024'],
            ['name' => 'Dispatch Department', 'email' => 'dispatch@jmbpackaging.com', 'password' => 'DispatchJMB@2024'],
            ['name' => 'Store Department', 'email' => 'store@jmbpackaging.com', 'password' => 'StoreJMB@2024'],
            ['name' => 'Info', 'email' => 'info@jmbpackaging.com', 'password' => 'InfoJMB@2024'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => Hash::make($user['password']), // Hash the password before saving
                ]
            );
        }
    }
}
