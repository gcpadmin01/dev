<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Agent;
use App\Model\Resort;
use App\Libraries\Agent\CurlRegisterAgent;

class RegisterAgent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register:force {--a=null}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register an Agent mode force --a=AGENTEID';

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
        $agent = $this->option('a');
        if($agent != 'null'){
            $this->info("INICIANDO REGISTRO FORZADO....");
            $catalog = Agent::where('id',$agent)->with(['resorts'])->get();
            $agent   = $catalog[0];
            $resorts = Resort::all()->where('status',1);
            $this->info($agent->agency_name." AGENCY CODE:".$agent->iata);
            $this->info("ESPERE UN MOMENTO....");
            #die;
            $register = new CurlRegisterAgent($agent,$resorts);
            $register->send();

        }
    }

}
