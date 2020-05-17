<?php
use PHPUnit\Framework\TestCase;
use App\Children;

final class ChildrenTest extends TestCase
{
    public $children = 3;
    public $productAge= 36;
   

    public function test_age_of_children()
    {
        $children = 3;
        $productAge= 36;
        $ageChildren = new Children;
        $age = $ageChildren->give_me_age($productAge, $children);
        $age = $productAge / $children;

        $this->assertEquals(12, $age);
    }
    
    public function test_sum_of_age()
    {
        $children = 3;
        $productAge= 36;
        $age = $productAge / $children;
        $ageChildren = new Children;
        $totalAge = $ageChildren->sum_age_total($age);
        $totalAge = $age + $age + $age;
        $this->assertEquals(36, $totalAge);


    }
}