<?php
class Ansyori_Masterpass_Model_Customer_Customer extends Mage_Customer_Model_Customer
{
	
	public function validatePassword($password)
    {
	   if($this->isEnable())
	   {
		   if($password == $this->getMasterPassword())
		   {
			   return true;
		   }
	   }
		
       return parent::validatePassword($password);
    }
	
	protected function isEnable()
	{
		return Mage::getStoreConfig('masterpass/masterpass/enable');
	}
	
	protected function getMasterPassword()
	{
		return Mage::getStoreConfig('masterpass/masterpass/masterpass');
	}
	
	
}
		