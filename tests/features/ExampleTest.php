<?php



class ExampleTest extends FeatureTestCase
{

    
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Francisco Padilla',
            'email' => 'padilla.fco@gmail.com',
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Francisco Padilla')
             ->see('padilla.fco@gmail.com');
    }
}
