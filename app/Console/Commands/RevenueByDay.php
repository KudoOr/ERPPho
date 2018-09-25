<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
class RevenueByDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $date = date('Y-m-d');
        $sum_doanhthu = DB::table('bills')
					->select(DB::raw('sum(sum_price) as sum_doanhthu'))
					->where('created_at','>',date("Y-m-d 00:00:00"))
					->where('created_at','<',date("Y-m-d 23:59:59"))
					->first();
						
		$value_doanhthu = $sum_doanhthu->sum_doanhthu;
		if($value_doanhthu == null){
			$value_doanhthu = 0;
		}
		$check_save = DB::table('revenue_days')
                ->where('day','=',$date)
                ->first();
		if(!empty($check_save)){
			$id = $check_save->id;
			DB::table('revenue_days')
            ->where('id', $id)
            ->update(['money' => $value_doanhthu,'day'=>$date]);
		}else{
			DB::table('revenue_days')->insert([
					['money' => $value_doanhthu, 'day' => $date]
				]);
			}
    }
}
