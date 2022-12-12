<?php
function func_loop($class_pattern,$attributes, $color_pattern)
{
    $payload = '';
    $payload_arr = array();
    foreach($color_pattern as $index => $value)
    {
        $id = str_replace('*', $index, $class_pattern);

        foreach($attributes as $index2 => $value2)
        {
            $final_val = $value2;
            if(strpos($value2, '*') !== false)
            {
                $final_val = str_replace('*', $value, $value2);
            }

            $payload_arr[$id][$index2] = $final_val;
        }

    }

    //print('<pre>'.print_r($payload_arr,true).'</pre>');

    foreach($payload_arr as $class_name => $value)
    {
        $payload .= '.'.$class_name.' ';
        $payload .= '{'."\n";
        foreach($payload_arr[$class_name] as $att_id => $value)
        {
            $payload .= $att_id.': '.$value.";\n";
        }
        $payload .= '}'."\n";
    }

    return $payload;
}

function func_header($class_pattern,$class_list)
{
    $list = '';
    foreach($class_list as $index => $value)
    {
        if($list != '')
        {
            $list .= ",\n";    
        }

        $list .= $class_pattern.($value != '' && $value != '0' ? '-'.$value : '');
    }   
    
    return $list;
}

function gen_css($arr_map)
{
    $content = '';

    if($arr_map['mode'] == 'gen-bp_gen')
    {
        foreach($arr_map['list'] as $breakpoint => $value)
        {
            if($breakpoint != '')
            {
                $content .= "@media (min-width: $breakpoint) {\n";    
            }
            
            $list_css_header = '';
            foreach($value['list_class']['list'] as $index => $val)
            {
                $final_class_name = $value['list_class']['place_holder'];
                foreach($value['list_class']['list'][$index] as $val_css => $val)
                {
                    
                    $final_class_name = str_replace($val_css,$val,$final_class_name);
                    
                    if($list_css_header != '')
                    {
                        $list_css_header .= ",\n";
                    }
        
                    $list_css_header .= $final_class_name;
                }
            }

            $content .= $list_css_header;
            $content .= " {\n"; 
            
            foreach($value['list_attribute'] as $class_name => $val)
            {
                $content .= "$class_name : $val;\n";       
            }

            $content .= "}\n";   
            
            if($breakpoint != '')
            {
                $content .= "}\n";    
            } 
        } 
    }
    elseif($arr_map['mode'] == 'gen_static')
    {
        $list_css_header = '';
        foreach($arr_map['list_class']['list'] as $index => $val)
        {
            foreach($arr_map['list_class']['list'][$index] as $val_css => $val)
            {
                $final_class_name = $arr_map['list_class']['place_holder'];
                $final_class_name = str_replace($val_css,$val,$final_class_name);
                
                if($list_css_header != '')
                {
                    $list_css_header .= ",\n";
                }
    
                $list_css_header .= $final_class_name;
            }
        }

        $content .= $list_css_header;
        $content .= " {\n"; 
        
        foreach($arr_map['list_attribute'] as $class_name => $val)
        {
            $content .= "$class_name : $val;\n";       
        }

        $content .= "}\n";   
    }
    elseif($arr_map['mode'] == 'gen_gen')
    {
        $list_css_header = '';
            
        foreach($arr_map['list'] as $index => $value)
        {
            $final_class_name = $value['list_class']['place_holder'];
            foreach($value['list_class']['list'] as $index => $val)
            {
                foreach($value['list_class']['list'][$index] as $val_css => $val)
                {
                    
                    $final_class_name = str_replace($val_css,$val,$final_class_name);
                    
                }
            }

            $content .= $final_class_name;
            $content .= " {\n"; 
            
            foreach($value['list_attribute'] as $class_name => $val)
            {
                $content .= "$class_name : $val;\n";       
            }

            $content .= "}\n";   
            
        } 
    }
    elseif($arr_map['mode'] == 'bp_gen_gen')
    {
        foreach($arr_map['list'] as $breakpoint => $value)
        {
            if($breakpoint != '' && $breakpoint != '0')
            {
                $content .= "@media (min-width: $breakpoint) {\n";    
            }

            $list_css_header = '';
                
            foreach($arr_map['list'][$breakpoint] as $index_css => $value)
            {
                if($list_css_header != '')
                {
                    $list_css_header .= ",\n";
                }
                $final_class_name = $value['list_class']['place_holder'];
                foreach($value['list_class']['list'] as $index => $val)
                {
                    foreach($value['list_class']['list'][$index] as $val_css => $val)
                    {
                        $final_class_name = str_replace($val_css,$val,$final_class_name);
                        
                    }
                    
                }
                $list_css_header .= $final_class_name;
                
            }

            $content .= $list_css_header;
            $content .= " {\n"; 
            
            foreach($value['list_attribute'] as $class_name => $val)
            {
                $content .= "$class_name : $val;\n";       
            }

            $content .= "}\n";  

            if($breakpoint != '' && $breakpoint != '0')
            {
                $content .= "}\n";    
            }
        }    
    }
    elseif($arr_map['mode'] == 'bp_head_body')
    {
        foreach($arr_map['list'] as $breakpoint => $value)
        {
            if($breakpoint != '' && $breakpoint != '0')
            {
                $content .= "@media (min-width: $breakpoint) {\n";    
            }

            foreach($arr_map['list'][$breakpoint] as $header_index => $value)
            {
                $final_class_name = $arr_map['list'][$breakpoint][$header_index]['header']['place_holder'];
                foreach($arr_map['list'][$breakpoint][$header_index]['header']['variable'] as $variable_index => $val)
                {
                    foreach($arr_map['list'][$breakpoint][$header_index]['header']['variable'][$variable_index] as $variable => $print)
                    {
                        $final_class_name = str_replace($variable,$print,$final_class_name);    
                    } 
                } 
                
                $content .= $final_class_name; 
                $content .= "{\n"; 
                foreach($arr_map['list'][$breakpoint][$header_index]['body'] as $class_name => $val)
                {
                    $content .= "$class_name : $val;\n";       
                }
                $content .= "}\n"; 
            }
            

            if($breakpoint != '' && $breakpoint != '0')
            {
                $content .= "}\n";    
            }
        }    
    }
    return $content."\n";
}

