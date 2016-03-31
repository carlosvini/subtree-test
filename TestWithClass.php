<?php
class TestWithClass {
    public function test()
    {
        
        $bar = [];
        if ($xtra_foo) {
            foreach ($xtra_foo as $item) {
                $item = is_array($item) ? $item : [$item];
                $bar[$item[0]]['remover'] = count($item) == 1;
                if (!is_null($item[1])) {
                    $bar[$item[0]]['default'] = $item[1];
                }
                if ($item[2] == 'where') {
                    $bar[$item[0]]['where'] = $item[3];
                } elseif ($item[2] == 'obrigatorio') {
                    $bar[$item[0]]['obrigatorio'] = $item[3];
                } elseif ($item[2] == 'separador') {
                    $bar[$item[0]]['separador'] = $item[3];
                } elseif ($item[2] == 'after') {
                    $bar[$item[0]]['after'] = $item[3];
                    $campos = array_move_key($campos, $item[0], $item[3]);
                } elseif ($item[2] == 'special') {
                    $bar[$item[0]]['special'] = $item[3];
                } else {
                    $bar[$item[0]]['readonly'] = $item[2];
                }
            }
        }
        
    }
  }
