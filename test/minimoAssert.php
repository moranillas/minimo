<?php
   require_once "negativos.php";
   use PHPUnit\Framework\TestCase;// Indica donde está el TestCase
   class minimoAssert extends TestCase{
      /*
	       El comentario de abjao es por si no quieres llamar a la funcion testTodosNegativos() sino no tener que poner el test delante.
	       @test
      */

	  // Comprueba si son todos  negativos.
	  public function testTodosNegativos(){

		   $a=[3,-55,-12,-78,-567];
		   $res = todosNegativos($a);
		   $this->assertFalse($res);

	  }
	  /* Comprueba si son todos  negativos.
	  public function testNoTodosNegativos(){

		   $a=[3,-55,-12,-78,567];
		   $res = todosNegativos($a);
		   $this->assertFalse($res);

	  }
	  // Comprueba si el primero del array es negativo o no.
	  public function testNegInicio(){

		   $a=[-3,-55,-12,-78,567];
		   $res = todosNegativos($a);
		   $this->assertFalse($res);

	  }
	  // Comprueba si el primero del array es negativo o no.
	  public function testNegFinal(){

		   $a=[3,-55,-12,-78,-567];
		   $res = todosNegativos($a);
		   $this->assertFalse($res);

	  }
	  // Comprueba si está vacío o no.
	  public function testVacio(){

		   $a=[];
		   $res = todosNegativos($a);
		   $this->assertFalse($res);

	  }
	  //////////////////////////////////////////////////////////////
	  // Comprueba si el primero del array es negativo o no.
	  public function testPosInicio(){

		   $a=[-3,-55,-12,-78,567];
		   $res = todosNegativos($a);
		   $this->assertFalse($res);

	  }
	  // Comprueba si el primero del array es negativo o no.
	  public function testPosFinal(){

		   $a=[3,-55,-12,-78,-567];
		   $res = todosNegativos($a);
		   $this->assertFalse($res);

	  }
    */


   }

?>
