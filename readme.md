Kotoba
=======

> 言葉 |kotoba|(koh-toe-bah)
> noun
> word, language : used normally in place of the term "gengo:language" which is used more academically



# About
Kotoba is an extension language pack for Laravel 5.x

Use [illuminate3's Lingos](https://github.com/illuminate3/vedettte "illuminate3's Lingos") for Laravel 4.

I have been trying to refine how the words and phrases have been laid out. I do realize that this package
is English centric but with your help I'm sure that we could fix this problem.


## Version
1.0.0
* Based on the Lingos language file pack


## Available Languages
* English

## Installation

1.)
Add to composer.json in the require statement:

```
"require": {
    "illuminate3/kotoba": "dev-master",
    ...
},
```

2.)
Add to the app.php providers list

```
'Illuminate3\Kotoba\KotobaServiceProvider',
```

## Usage

real world example:

```
{{ trans('kotoba::auth.register') }}
{{ Lang::get('kotoba::auth.register') }}
```

Break down of how it works:

```
{{ trans('kotoba::filename.line') }}
{{ Lang::get('kotoba::filename.line') }}
@lang('kotoba::filename.line')
```
Plurals
```
{{ Lang::choice('kotoba::file.line', 1|2) }}
```

kotoba:: // The package name
auth.    // The language file name
register // The phrase or word that you want to call

Result: Register


## Files

1. account    :: standard account terminology
2. auth       :: terminology that is more specific towards authorization and authentification
3. button     :: various terminology appearing on buttons
4. cms        :: typical terminology used by CMS's
4. email      :: email template phrases and words
5. general    :: bases phrases and words
6. group      :: group terminology
6. permission :: permission terminology
6. role       :: role terminology
5. table      :: various terminology appearing on table column headings

Note: Sometimes you have words or phrases that can fall into both the button, table and general categories.
I separated these since you might want to have them slightly different, like capitalizations or similar.



## Projects used to create Kotoba
[illuminate3's Lingos](https://github.com/illuminate3/vedettte "illuminate3's Lingos")



## To the Community
Feel free to fork all you want. What would be nice if you were to add your own language to this package.


## Future
* Add Languages
* Consider moving towards DB installation or create separate package.
* Think of sane directory layout in case the files become too many.
* Find a way to version control Caouec's package
* Consolidate singular and plurals
* Look into integrating the base Laravel language files
* Further refining of how to create an easy to use organization.
