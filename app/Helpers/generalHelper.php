<?php 

function duration($startDate,$finishDate = null,$inDays = false)
{
	$start = Carbon\Carbon::parse($startDate);
	$finish = $finishDate ? Carbon\Carbon::parse($finishDate) : Carbon\Carbon::now();
	if($inDays === true)
	{
		return $start->diffInDays($finish, false) . 'days';
	}
	else 
	{
		return $start->diffInYears($finish, false) .' years '. ($start->diffInDays($finish, false) % 365) . 'days';
	} 
}