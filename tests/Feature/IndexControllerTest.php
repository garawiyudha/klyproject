<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Storage;

class IndexControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAccessIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('index');
    }

    public function testAccessDetail()
    {
    	$data = [
 			'name' => 'gara',
 			'date' => '29-07-1995',
 			'email' => 'garawiyudha@gmail.com',
 			'address' => 'jl. panglima sudirman gg.5 no.18'
 		];

		$response = $this->post('/', $data);
		$datenow = $response->original['datenow'];
		$fileName = $data['name'].'-'.$datenow.'.txt';
 		$isFileExists = file_exists($fileName);
 		$exists = Storage::disk('local')->exists($fileName);	
 		$this->assertTrue($exists);
    	$response = $this->get('/profile/'.$data['name'].'-'.$datenow);
    	$response->assertViewIs('detail');
    	$response->assertViewHas('name', $data['name']);
    	$response->assertViewHas('date', $data['date']);
    	$response->assertViewHas('email', $data['email']);
    }

 	public function testStore()
 	{
 		$data = [
 			'name' => 'gara',
 			'date' => '29-07-1995',
 			'email' => 'garawiyudha@gmail.com',
 			'address' => 'jl. panglima sudirman gg.5 no.18'
 		];

		$response = $this->post('/', $data);
		$datenow = $response->original['datenow'];
		$fileName = $data['name'].'-'.$datenow.'.txt';
 		$isFileExists = file_exists($fileName);
 		$exists = Storage::disk('local')->exists($fileName);	
 		$this->assertTrue($exists);
 		Storage::delete($fileName);
 	}
}