
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
    if ($campos) {
        foreach ($campos as $campo) {
            if ($bar[$campo['tipo']]) {
                if ($bar[$campo['tipo']]['where']) {
                    $campo['where'] = $bar[$campo['tipo']]['where'];
                }
                if (isset($bar[$campo['tipo']]['obrigatorio'])) {
                    $campo['obrigatorio'] = $bar[$campo['tipo']]['obrigatorio'];
                }
                if (isset($bar[$campo['tipo']]['separador'])) {
                    $campo['separador'] = $bar[$campo['tipo']]['separador'];
                }
                if (isset($bar[$campo['tipo']]['special'])) {
                    $campo['tipo_de_campo'] = 'special';
                    $campo['nome_original'] = $campo['nome'];
                    $campo['nome'] = $bar[$campo['tipo']]['special'];
                }
                if (!is_null($bar[$campo['tipo']]['default'])) {
                    $campo['default'] = $bar[$campo['tipo']]['default'];
                }
                $campo['readonly'] = $bar[$campo['tipo']]['readonly'];
            }
            if (!$bar[$campo['tipo']]['remover']) {
                var_dump($bar);
            }
        }
    }
    }
  }
