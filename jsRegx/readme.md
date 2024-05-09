# JavaScript Regular Expressions

This readme file provides an overview of JavaScript regular expressions.

## Metacharacters

- `.`: Matches any single character except newline or line terminator.
- `\w`: Matches any word character (alphanumeric or underscore).
- `\W`: Matches any non-word character.
- `\d`: Matches any digit character.
- `\D`: Matches any non-digit character.
- `\s`: Matches any whitespace character.
- `\S`: Matches any non-whitespace character.
- `\b`: Matches a word boundary (match at the beginning or end of a word).
- `\B`: Matches a non-word boundary (match not at the beginning or end of a word).
- `[]`: Matches any character within the brackets.
- `[abc]`: Matches any character that is either 'a', 'b', or 'c'.
- `[^abc]`: Matches any character that is not 'a', 'b', or 'c'.
- `[0-9]`: Matches any digit from 0 to 9.
- `[^0-9]`: Matches any non-digit character.
- `[x|y]`: Matches either 'x' or 'y'.
- `\o`: Matches a null character.
- `\n`: Matches a new line.

## Quantifiers

- `+`: Matches one or more occurrences of the preceding character or group.
- `*`: Matches zero or more occurrences of the preceding character or group.
- `?`: Matches zero or one occurrence of the preceding character or group.
- `n{x}`: Matches exactly 'x' occurrences of the preceding character or group.
- `n{x,y}`: Matches a sequence of 'x' to 'y' occurrences of the preceding character or group.


## Examples

Here are some examples to illustrate the usage of JavaScript regular expressions:

- Matching email addresses: `/^\w+@\w+\.\w+$/`
- Matching phone numbers: `/^\d{3}-\d{3}-\d{4}$/`
- Matching URLs: `/^(http|https):\/\/\w+\.\w+$/`
- Matching dates in MM/DD/YYYY format: `/^\d{2}\/\d{2}\/\d{4}$/`
- Matching a sequence of exactly 3 'a' characters: `/a{3}/`
- Matching a sequence of 2 to 4 'b' characters: `/b{2,4}/`


