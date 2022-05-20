<?php


class Converter
{
	public $data;
	
	public function importJson($str)
	{
		$this->data = json_decode($str, TRUE);
		if($this->data === NULL)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	public function importPlist($str)
	{
		require_once(__DIR__.'/CFPropertyList/CFPropertyList.php');
		$plist = new \CFPropertyList\CFPropertyList();
		$plist->parse($str);
		$this->data = $plist->toArray();
	}
	
	public function exportJson()
	{
	
		return json_encode($this->data);
	}
	
	public function exportPlist()
	{
		require_once(__DIR__.'/CFPropertyList/CFPropertyList.php');
		$plist = new \CFPropertyList\CFPropertyList();
		$td = new \CFPropertyList\CFTypeDetector();  
		$guessedStructure = $td->toCFType( $this->data );
		$plist->add( $guessedStructure );
		return $plist->toXML();
	}
}
