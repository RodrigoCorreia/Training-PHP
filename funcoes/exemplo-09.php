<?php 

$hierarquia = array(
	array(
		'nome_cargo'=> 'CEO',
		'subordinados' =>array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: Gerente de vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Termino: Gerente de vendas

				)
			),
			//Termino: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Gerente de Vendas',
				'subordinados'=> array(
					//inicio: Gerente de Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//Inicio: Supervisor
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//Termino: Supervisor
						)
					),
					//Termino: Gerente de Contas a Pagar
					//Inicio: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//Inicio: Supervidor de Suprimentos
							array(
								'nome_cargo'=>'Supervidor de Suprimentos'
							)
						)
					)
					//Termino: Gerente de Compras
				)
			),
		)
	)
);


function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}
		
		$html .= "</li>";

	}

	$html .= "</ul>";

	return $html;
}


echo exibe($hierarquia);

 ?>