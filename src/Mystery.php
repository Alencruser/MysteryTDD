<?php 

Class Mystery
{
	private $_number;
	private $_life;
	function __construct($life)
	{
		$this->_number=rand(0,9);
		$this->_life=$life;
	}
	public function checkInput($input)
	{
		if($this->_life>0){
			if($input<$this->_number){
				$this->decLife();
				return "C'est plus";
			}elseif($input>$this->_number) {
				$this->decLife();
				return "C'est moins";
			}else {
				return "C'est gagné !";
			}
		}else{
			return "Vous avez perdu !";
		}
	}
	public function getNumber()
	{
		return $this->_number;
	}
	public function decLife()
	{
		return $this->_life--;
	}
	public function getLife()
	{
		return $this->_life;
	}
}