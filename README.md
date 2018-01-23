# groupBy

A Craft plugin (Twig filter) for grouping entries.

## Usage

* `param 1`: Attribute to group by, in dot notation
* `param 2`: Group un-grouped entries by a key. Defaults to `false`, meaning un-grouped items are removed. These entries are always added to the end of the returned array.

```
{% set allEntries = craft.entries.section('blog').find() %}
{% set allEntriesByCat = allEntries|groupBy('myCategoryField.slug', 'unGrouped') %}
```

## Examples

In it's simplest form, the `groupBy` filter works like [Craft's native `group` filter][1].

```
{% set allEntries = craft.entries.section('blog').find() %}
{% set allEntriesByYear = allEntries|groupBy('postDate.year') %}
```

However, `groupBy` can also group by nested objects:

```
{% set allEntriesByCat = allEntries|groupBy('myCategoryField.slug') %}
{% set allEntriesBySection = allEntries|groupBy('section.title') %}
```

And you can even get really crazy if you want:

```
{% set allEntriesByNestedCat = allEntries|groupBy('myEntriesField.myCategoryField.slug') %}
{% set allEntriesByMatrix = allEntries|groupBy('myMatrix.myEntriesField.dateField.localeDate') %}
```

## Discussion

[Motivation for plugin on StackExchange][2]

[1]: http://buildwithcraft.com/docs/templating/filters#group
[2]: http://craftcms.stackexchange.com/questions/4832/is-it-possible-to-group-entries-by-checkbox/4834#4834
