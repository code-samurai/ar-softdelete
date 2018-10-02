<?php

namespace yii2tech\ar\softdelete;

use yii\base\Behavior;
use yii\base\Event;

class RelatedModelsSoftDeleteBehavior extends Behavior
{
    public $relations = [];

    public function events()
    {
        return [
            SoftDeleteBehavior::EVENT_AFTER_SOFT_DELETE => 'softDeleteApplications',
            SoftDeleteBehavior::EVENT_AFTER_RESTORE => 'restoreApplication'
        ];
    }

    public function softDeleteApplications(Event $event)
    {
        $model = $event->sender;
        foreach ($this->relations as $relation) {
            foreach ($model->{$relation} as $related) {
                $related->softDelete();
            }
        }
    }

    public function restoreApplication(Event $event)
    {
        $model = $event->sender;
        foreach ($this->relations as $relation) {
            foreach ($model->{$relation} as $related) {
                $related->restore();
            }
        }
    }
}
