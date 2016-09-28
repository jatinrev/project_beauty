<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'site_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'value'];

    /**
     * FUNCTION TO GET ALL THE SITE SETTINGS
     * @param  [type] $key [description]
     * @return [type]      [description]
     * $query->where([
     *      ['column_1', '=', 'value_1'],
     *      ['column_2', '<>', 'value_2'],
     *      [COLUMN, OPERATOR, VALUE],
     *      ...
     *  ])
     */
    public static function get_site_settings(array $keys) {
        $query  = static::whereIn('key', $keys)->get()->toArray();
        $output = [];
        foreach ($query as $key => $value) {
            $output[$value['key']] = $value['value'];
        }
        return $output;
    }

    public static function get_general_site_setting() {
        $output = static::get_site_settings(['frontpage_slider_text', 'text_right', 'textarea_professional', 'textarea_customer','Professional_text']);
        $output['frontpage_slider_text'] = explode(',', $output['frontpage_slider_text']);

        /*$output['Professional_text1'] = explode(',', $output['Professional_text1']);*/
        return $output;
    }

}
