<?php

namespace App;

trait RecordActivity 

{


 protected static function bootRecordActivity()
 {

 	if(auth()->guest()) return;


    foreach( static::getActivitiesToRecord()as $event) {
     	static::$event(function ($model) use ($event) {
     		$model->RecordActivity($event);
     	});
     };
 }

 public static function getActivitiesToRecord()
 {
     return ['created'];
 }

 public function recordActivity($event)
 {
     $this->activity()->create([
     	'user_id' => auth()->id(),
     	'type' => $this->getActivityType($event),
     ]);
 }
 public function activity()
 {
 	return $this->morphMany(Activity::class, 'subject');    
 }

 public function getActivityType($event)
 {
     return $event . ' ' . strtolower((new \ReflectionClass($this))->getShortName());
 }

}