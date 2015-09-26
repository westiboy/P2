<?php
	#The following arrays make up the 4 blocks of text for the password
	$word_list = array(
		'be',
		'have',
		'do',
		'say',
		'get',
		'make',
		'go',
		'know',
		'take',
		'see',
		'come',
		'think',
		'look',
		'want',
		'give',
		'use',
		'find',
		'tell',
		'ask',
		'work',
		'seem',
		'feel',
		'try',
		'leave',
		'call',
		#culled from https://www.englishclub.com/vocabulary/common-verbs-25.htm
		'time',
		'person',
		'year',
		'way',
		'day',
		'thing',
		'man',
		'world',
		'life',
		'hand',
		'part',
		'child',
		'eye',
		'woman',
		'place',
		'work',
		'week',
		'case',
		'point',
		'government',
		'company',
		'number',
		'group',
		'problem',
		'fact',
		#culled from https://www.englishclub.com/vocabulary/common-nouns-25.htm
		'good',
		'new',
		'first',
		'last',
		'long',
		'great',
		'little',
		'own',
		'other',
		'old',
		'right',
		'big',
		'high',
		'different',
		'small',
		'large',
		'next',
		'early',
		'young',
		'important',
		'few',
		'public',
		'bad',
		'same',
		'able',		
		#culled from https://www.englishclub.com/vocabulary/common-adjectives-25.htm
		'of',
		'in',
		'to',
		'for',
		'with',
		'on',
		'at',
		'from',
		'by',
		'about',
		'as',
		'into',
		'like',
		'through',
		'after',
		'over',
		'between',
		'out',
		'against',
		'during',
		'without',
		'before',
		'under',
		'around',
		'among',
		#culled from https://www.englishclub.com/vocabulary/common-prepositions-25.htm
	);


	$listArray = array(
		'$verb_list',
		'$noun_list',
		'$adj_list',
		'$prep_list',
		);

	$spxCHRArray = array(
		'~',
		'!',
		'@',
		'#',
		'$',
		'%',
		'^',
		'?',
		':',
		'.',
		'(',
		')',
		'{',
		'}',
		'[',
		'~',
		);

	$itrArray = array();
	$passWord = array();
	$strARR = array();

/*
	for ($i=0; $i < 4; $i++) { 
		$itrArray[] = rand(0, 24);	
	};

	$strARR[0] = $prep_list[$itrArray[0]];
	$strARR[1] = $verb_list[$itrArray[1]];
	$strARR[2] = $adj_list[$itrArray[2]];
	$strARR[3] = $noun_list[$itrArray[3]];
*/

/*
	example of $_POST array
	 Array
		(
		    [wr_total] => 4
		    [inc_num] => on
		    [inc_spchr] => on
		)


	foreach($_GET as $key => $value) {
		//Check the number of words in the password
		if($key=='wr_total') {
			for ($i=0; $i < $value; $i++) { 
				$passWord[$i] = $word_list[array_rand($word_list)];
			}
		if ($key=='inc_num' AND $value=='on') {
			array_push($passWord,rand(0,9));
		}
		if ($key=='inc_num' AND $value=='on') {
			array_push($passWord,$spxCHRArray[array_rand($spxCHRArray)]);
		}
	}
*/
	foreach ($_GET as $key => $value) {
		//array_push($passWord,$value);
		if ($key == 'wr_total') {
			for ($i=0; $i <$value ; $i++) { 
				array_push($passWord,$word_list[array_rand($word_list)]);
			}
		}
	}





















;?>