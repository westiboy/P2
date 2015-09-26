<?php
	#The following array makes up the word list for the password
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

	#The following array makes up the special character list for the password
	$spxCHR_List = array(
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

	#defines empty array for the password contents
	$passWord = array();
	
	#function to pass through the results of the GET to define the words, and a number and/or special character if selected
	#for each value in the global GET array perform a check
	foreach ($_GET as $key => $value) {
		#for the total word count, push a random number to the password array
		if ($key == 'wr_total') {
			for ($i=0; $i <$value ; $i++) { 
				array_push($passWord,$word_list[array_rand($word_list)]);
			}
		}
		#if the include number box was checked, push a random number to the password array
		if ($key == 'inc_num') {
			array_push($passWord,rand(0,9));
		}
		#if the include special character box was checked, push a random pecial character from the $spxCHR_List array to the password array
		if ($key == 'inc_spchr') {
			array_push($passWord,$spxCHR_List[array_rand($spxCHR_List)]);
		}
	}
;?>