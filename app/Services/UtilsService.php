<?php
namespace App\Services;

class UtilsService{
    //recherche pour tous les modèles
    public static function Search(Model $model) {
        $query = $model::query();
        foreach($model->getAttributes() as $attribute => $values) {
            if($values !== null) {
                if(is_numeric($values)) {
                    $query->where($attribute, '=', $values);
                }
                elseif(is_string($values)) {
                    $query->where($attribute, 'like', "%$values%");
                }
                else {
                    $query->where($attribute, '=', $values);
                }
            }
        }
        return $query;
    }
}
?>