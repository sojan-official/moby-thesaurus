# Moby Thesaurus and Part of Speech Dictionary #
A class for parsing the Moby Thesaurus and Moby Part of Speech dictionary.

## Features: ##
  1. Get synonyms for a particular word.
  1. If the exact word is not available, the class uses php\_stem and levenshtein distance to get the word that is closest to the given word. This feature requires the PECL php\_stem extension to be available on the server.
  1. Get parts of speech for a word. Returns a list of parts of speech for the given word.

### Note: ###
This PHP class uses the The Project Gutenberg Etext of Moby Thesaurus II by Grady Ward and Moby Part-of-Speech II by Grady Ward. These are freely available public domain files from http://www.gutenberg.org/. These files are distributable in the United States. Copyright laws are changing all over the world, be sure to check the laws for your country before redistributing these files.

## Demonstrating `MobyThesaurus` PHP Class - Example Output ##
### Getting Synonyms for 'medications' (`MobyThesaurus::GetSynonyms`) ###
```
array ( 0 => 'medication', 1 => 'balm', 2 => 'balsam', 3 => 'curative measures', 4 => 'cure', 5 => 'drops', 6 => 'drug', 7 => 'electuary', 8 => 'elixir', 9 => 'ethical drug', 10 => 'first aid', 11 => 'generic name', 12 => 'healing arts', 13 => 'herbs', 14 => 'hospitalization', 15 => 'inhalant', 16 => 'lincture', 17 => 'linctus', 18 => 'materia medica', 19 => 'medical care', 20 => 'medical treatment', 21 => 'medicament', 22 => 'medicamentation', 23 => 'medicinal', 24 => 'medicinal herbs', 25 => 'medicine', 26 => 'medicines', 27 => 'mixture', 28 => 'nonprescription drug', 29 => 'officinal', 30 => 'patent medicine', 31 => 'pharmacon', 32 => 'physic', 33 => 'powder', 34 => 'preparation', 35 => 'prescription drug', 36 => 'proprietary', 37 => 'proprietary medicine', 38 => 'proprietary name', 39 => 'psychotherapy', 40 => 'regime', 41 => 'regimen', 42 => 'simples', 43 => 'syrup', 44 => 'therapeusis', 45 => 'therapeutics', 46 => 'theraputant', 47 => 'therapy', 48 => 'tisane', 49 => 'treatment', 50 => 'vegetable remedies ', )
```

Processing Time: 1.6467730998993 seconds

### Getting Part of Speech for 'feel' (`MobyThesaurus::GetPartsOfSpeech`) ###
```
array ( 'feeler gauge' => array ( 0 => 'h', ), 'feeler' => array ( 0 => 'N', ), 'feeless' => array ( 0 => 'A', ), 'feelingful' => array ( 0 => 'A', ), 'feelinglessly' => array ( 0 => 'v', ), 'feelingless' => array ( 0 => 'A', ), 'feelingly' => array ( 0 => 'v', ), 'feelingness' => array ( 0 => 'N', ), 'feeling' => array ( 0 => 'N', 1 => 'A', ), 'feel' => array ( 0 => 'V', 1 => 't', 2 => 'i', 3 => 'N', ), )
```
Processing Time: 0.7630729675293 seconds

## Faster Processing with MySQL Database Version of Moby Thesaurus ##

If you are planning on processing many words in real time, you may want to use the MySQL version of the Moby Thesaurus. The [Moby Thesaurus MySQL data and structure can be downloaded here](http://code.google.com/p/moby-thesaurus/downloads/list). The current code does not support the MySQL version, but writing queries against it is easy.

Example SQL:
```
SELECT synonyms.* FROM words LEFT JOIN synonyms ON synonyms.word_id = words.word_id WHERE word = "feeling";
```

That query is executed in 266 ms, rather than 1.6 seconds.

Have a look at the moby\_thesaurus code for an example of using stemming to find words that are similar to the word you're looking for.