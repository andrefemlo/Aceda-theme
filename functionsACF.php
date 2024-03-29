add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_65ec93cf10089',
	'title' => 'Banco de vagas',
	'fields' => array(
		array(
			'key' => 'field_65ec93a39937a',
			'label' => 'Nome completo',
			'name' => 'Nome-completo',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Digite seu nome completo',
			'maxlength' => '',
			'placeholder' => 'Digite seu nome completo',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_65ec940c72a41',
			'label' => 'Email',
			'name' => 'Email',
			'aria-label' => '',
			'type' => 'email',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Digite seu email',
			'placeholder' => 'Digite seu Email',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_65ec94c372a42',
			'label' => 'Telefone',
			'name' => 'Telefone',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => 'Digite seu telefone',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Digite seu telefone',
			'min' => 8,
			'max' => '',
			'placeholder' => '+55 11 99999-9999',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_65ec951872a43',
			'label' => 'País de origem',
			'name' => 'pais_de_origem',
			'aria-label' => '',
			'type' => 'checkbox',
			'instructions' => 'País de origem',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Afeganistão' => 'Afeganistão',
				'África do Sul' => 'África do Sul',
				'Albânia' => 'Albânia',
				'Alemanha' => 'Alemanha',
				'Andorra' => 'Andorra',
				'Angola' => 'Angola',
				'Antígua e Barbuda' => 'Antígua e Barbuda',
				'Arábia Saudita' => 'Arábia Saudita',
				'Argélia' => 'Argélia',
				'Argentina' => 'Argentina',
				'Arménia' => 'Arménia',
				'Austrália' => 'Austrália',
				'Áustria' => 'Áustria',
				'Azerbaijão' => 'Azerbaijão',
				'Bahamas' => 'Bahamas',
				'Bangladesh' => 'Bangladesh',
				'Barbados' => 'Barbados',
				'Barém' => 'Barém',
				'Bélgica' => 'Bélgica',
				'Belize' => 'Belize',
				'Benim' => 'Benim',
				'Bielorrússia' => 'Bielorrússia',
				'Bolívia' => 'Bolívia',
				'Bósnia e Herzegovina' => 'Bósnia e Herzegovina',
				'Botsuana' => 'Botsuana',
				'Brasil' => 'Brasil',
				'Brunei' => 'Brunei',
				'Bulgária' => 'Bulgária',
				'Burquina Faso' => 'Burquina Faso',
				'Burúndi' => 'Burúndi',
				'Butão' => 'Butão',
				'Cabo Verde' => 'Cabo Verde',
				'Camarões' => 'Camarões',
				'Camboja' => 'Camboja',
				'Canadá' => 'Canadá',
				'Catar' => 'Catar',
				'Cazaquistão' => 'Cazaquistão',
				'Chade' => 'Chade',
				'Chile' => 'Chile',
				'China' => 'China',
				'Chipre' => 'Chipre',
				'Colômbia' => 'Colômbia',
				'Comores' => 'Comores',
				'Congo-Brazzaville' => 'Congo-Brazzaville',
				'Coreia do Norte' => 'Coreia do Norte',
				'Coreia do Sul' => 'Coreia do Sul',
				'Cosovo' => 'Cosovo',
				'Costa do Marfim' => 'Costa do Marfim',
				'Costa Rica' => 'Costa Rica',
				'Croácia' => 'Croácia',
				'Cuaite' => 'Cuaite',
				'Cuba' => 'Cuba',
				'Dinamarca' => 'Dinamarca',
				'Domínica' => 'Domínica',
				'Egito' => 'Egito',
				'Emirados Árabes Unidos' => 'Emirados Árabes Unidos',
				'Equador' => 'Equador',
				'Eritreia' => 'Eritreia',
				'Eslováquia' => 'Eslováquia',
				'Eslovénia' => 'Eslovénia',
				'Espanha' => 'Espanha',
				'Essuatíni' => 'Essuatíni',
				'Estado da Palestina' => 'Estado da Palestina',
				'Estados Unidos' => 'Estados Unidos',
				'Estónia' => 'Estónia',
				'Etiópia' => 'Etiópia',
				'Fiji' => 'Fiji',
				'Filipinas' => 'Filipinas',
				'Finlândia' => 'Finlândia',
				'França' => 'França',
				'Gabão' => 'Gabão',
				'Gâmbia' => 'Gâmbia',
				'Gana' => 'Gana',
				'Geórgia' => 'Geórgia',
				'Granada' => 'Granada',
				'Grécia' => 'Grécia',
				'Guatemala' => 'Guatemala',
				'Guiana' => 'Guiana',
				'Guiné' => 'Guiné',
				'Guiné Equatorial' => 'Guiné Equatorial',
				'Guiné-Bissau' => 'Guiné-Bissau',
				'Haiti' => 'Haiti',
				'Honduras' => 'Honduras',
				'Hungria' => 'Hungria',
				'Iémen' => 'Iémen',
				'Ilhas Marechal' => 'Ilhas Marechal',
				'Índia' => 'Índia',
				'Indonésia' => 'Indonésia',
				'Irã' => 'Irã',
				'Iraque' => 'Iraque',
				'Irlanda' => 'Irlanda',
				'Islândia' => 'Islândia',
				'Israel' => 'Israel',
				'Itália' => 'Itália',
				'Jamaica' => 'Jamaica',
				'Japão' => 'Japão',
				'Jibuti' => 'Jibuti',
				'Jordânia' => 'Jordânia',
				'Laus' => 'Laus',
				'Lesoto' => 'Lesoto',
				'Letónia' => 'Letónia',
				'Líbano' => 'Líbano',
				'Libéria' => 'Libéria',
				'Líbia' => 'Líbia',
				'Listenstaine' => 'Listenstaine',
				'Lituânia' => 'Lituânia',
				'Luxemburgo' => 'Luxemburgo',
				'Macedónia do Norte' => 'Macedónia do Norte',
				'Madagáscar' => 'Madagáscar',
				'Malásia' => 'Malásia',
				'Maláui' => 'Maláui',
				'Maldivas' => 'Maldivas',
				'Mali' => 'Mali',
				'Malta' => 'Malta',
				'Marrocos' => 'Marrocos',
				'Maurícia' => 'Maurícia',
				'Mauritânia' => 'Mauritânia',
				'México' => 'México',
				'Mianmar' => 'Mianmar',
				'Micronésia' => 'Micronésia',
				'Moçambique' => 'Moçambique',
				'Moldávia' => 'Moldávia',
				'Mónaco' => 'Mónaco',
				'Mongólia' => 'Mongólia',
				'Montenegro' => 'Montenegro',
				'Namíbia' => 'Namíbia',
				'Nauru' => 'Nauru',
				'Nepal' => 'Nepal',
				'Nicarágua' => 'Nicarágua',
				'Níger' => 'Níger',
				'Nigéria' => 'Nigéria',
				'Noruega' => 'Noruega',
				'Nova Zelândia' => 'Nova Zelândia',
				'Omã' => 'Omã',
				'Países Baixos' => 'Países Baixos',
				'Palau' => 'Palau',
				'Panamá' => 'Panamá',
				'Papua-Nova Guiné' => 'Papua-Nova Guiné',
				'Paquistão' => 'Paquistão',
				'Paraguai' => 'Paraguai',
				'Peru' => 'Peru',
				'Polónia' => 'Polónia',
				'Portugal' => 'Portugal',
				'Quénia' => 'Quénia',
				'Quirguistão' => 'Quirguistão',
				'Quiribáti' => 'Quiribáti',
				'Reino Unido' => 'Reino Unido',
				'República Centro-Africana' => 'República Centro-Africana',
				'República Checa' => 'República Checa',
				'Republica Democrática do Congo' => 'Republica Democrática do Congo',
				'República Dominicana' => 'República Dominicana',
				'Roménia' => 'Roménia',
				'Ruanda' => 'Ruanda',
				'Rússia' => 'Rússia',
				'Salomão' => 'Salomão',
				'Salvador' => 'Salvador',
				'Samoa' => 'Samoa',
				'Santa Lúcia' => 'Santa Lúcia',
				'São Cristóvão e Neves' => 'São Cristóvão e Neves',
				'São Marinho' => 'São Marinho',
				'São Tomé e Príncipe' => 'São Tomé e Príncipe',
				'São Vicente e Granadinas' => 'São Vicente e Granadinas',
				'Seicheles' => 'Seicheles',
				'Senegal' => 'Senegal',
				'Serra Leoa' => 'Serra Leoa',
				'Sérvia' => 'Sérvia',
				'Singapura' => 'Singapura',
				'Síria' => 'Síria',
				'Somália' => 'Somália',
				'Sri Lanca' => 'Sri Lanca',
				'Sudão' => 'Sudão',
				'Sudão do Sul' => 'Sudão do Sul',
				'Suécia' => 'Suécia',
				'Suíça' => 'Suíça',
				'Suriname' => 'Suriname',
				'Tailândia' => 'Tailândia',
				'Taiwan' => 'Taiwan',
				'Tajiquistão' => 'Tajiquistão',
				'Tanzânia' => 'Tanzânia',
				'Timor Leste' => 'Timor Leste',
				'Togo' => 'Togo',
				'Tonga' => 'Tonga',
				'Trindade e Tobago' => 'Trindade e Tobago',
				'Tunísia' => 'Tunísia',
				'Turcomenistão' => 'Turcomenistão',
				'Turquia' => 'Turquia',
				'Tuvalu' => 'Tuvalu',
				'Ucrânia' => 'Ucrânia',
				'Uganda' => 'Uganda',
				'Uruguai' => 'Uruguai',
				'Uzbequistão' => 'Uzbequistão',
				'Vanuatu' => 'Vanuatu',
				'Vaticano' => 'Vaticano',
				'Venezuela' => 'Venezuela',
				'Vietnã' => 'Vietnã',
				'Zâmbia' => 'Zâmbia',
				'Zimbabué' => 'Zimbabué',
			),
			'default_value' => array(
			),
			'return_format' => 'value',
			'allow_custom' => 0,
			'layout' => 'vertical',
			'toggle' => 0,
			'save_custom' => 0,
			'custom_choice_button_text' => 'Adicionar nova opção',
		),
		array(
			'key' => 'field_65ec95fd72a44',
			'label' => 'Área de atuação',
			'name' => 'area_de_atuacao',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => 'Área de atuação',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => 'Área de atuação',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_65ec963b72a45',
			'label' => 'Deixe uma mensagem',
			'name' => 'deixe_uma_mensagem',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => 'Deixar uma mensagem',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => 'Em poucas palavras um resumo sobre você e seu currículo',
			'new_lines' => '',
		),
		array(
			'key' => 'field_65ec969b72a46',
			'label' => 'Anexar Currículo (Uoload Resume)',
			'name' => 'anexar_curriculo',
			'aria-label' => '',
			'type' => 'file',
			'instructions' => 'Campo para adicionar ficheiros',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );
