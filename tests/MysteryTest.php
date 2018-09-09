<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "./src/Mystery.php";

final class mysteryTest extends TestCase
{
  public function testplus()
  {
    $partie1= new Mystery(3);
    $this->assertEquals("C'est plus",$partie1->checkInput($partie1->getNumber()-1));
  }
  public function testMoins()
  {
    $partie2= new Mystery(3);
    $this->assertEquals("C'est moins",$partie2->checkInput($partie2->getNumber()+1));
  }
  public function testSuccess()
  {
    $partie3= new Mystery(3);
    $this->assertEquals("C'est gagné !",$partie3->checkInput($partie3->getNumber()));
  }
  public function testLife()
  {
    $partie4=new Mystery(3);
    $partie4->checkInput(-1);
    $this->assertEquals(2,$partie4->getLife());
  }
  public function testLoose()
  {
    $partie5= new Mystery(3);
    $partie5->checkInput(10);
    $partie5->checkInput(12);
    $partie5->checkInput(42);
    $this->assertEquals("Vous avez perdu !",$partie5->checkinput(-1));
  }
  public function testNumber()
  {
    $partie6= new Mystery(3);
    $this->assertGreaterThan(-1,$partie6->getNumber());
    $this->assertLessThan(10,$partie6->getNumber());
  }
}


?>
