// var n1 = "1000";
// var p1 = /\d{4}/g;

var n2 = "1000";
var n3 = "100 ";
var n4 = "10000";
// var p2 = /\d{3,5}/g;
var p2 = new RegExp(/d{3,5},g/);
var res = p2.test(n2);
var result =  n2.match(p2);

console.log(p2);
console.log(res);
console.log(result);

// eg2::
var str = "the best things in life x";
var pt = new RegExp("[be]","g");
res = pt.test(str);
result =  str.match(pt);

console.log(pt);
console.log(res);
console.log(result);


// Basic matching and capturing groups
var text = "The year 2024 will be exciting.";
var yearPattern = /(\d{4})/;
var foundYear = text.match(yearPattern);
console.log("Found year:", foundYear[1]);

// Using alternation to find various fruits
var fruits = "apple, banana, cherry, date";
var fruitPattern = /\b(apple|banana|cherry)\b/g;
var selectedFruits = fruits.match(fruitPattern);
console.log("Selected fruits:", selectedFruits);

// Using a negative lookahead to exclude specific words
var sentence = "I love cats but not a catfish or caterpillar.";
var catPattern = /\bcat(?!fish|erpillar)\b/g;
var justCats = sentence.match(catPattern);
console.log("Just cats:", justCats);

// Backreferencing to find repeated words
var repeatedWords = "This is is a test test test.";
var repeatPattern = /\b(\w+)\s+\1\b/g;
var repeats = repeatedWords.match(repeatPattern);
console.log("Repeated words:", repeats);

// Using word boundaries to ensure full words are matched
var boundaryText = "These are sea and seasonal effects.";
var boundaryPattern = /\bsea\b/g;
var boundaryMatches = boundaryText.match(boundaryPattern);
console.log("Matches for 'sea' as a whole word:", boundaryMatches);

// Example of using Unicode property escapes (ES2018+)
var unicodeText = "Emoji 🥳 are 🚀 fun 🎉!";
var emojiPattern = /\p{Emoji_Presentation}/gu;
var emojis = unicodeText.match(emojiPattern);
console.log("Found emojis:", emojis);

// Matching valid email addresses (simplified example)
var emails = "test@example.com, bad-email@example, good.email@domain.net";
var emailPattern = /\b[\w.%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/i;
var validEmails = emails.match(emailPattern);
console.log("Valid emails:", validEmails);

// Using replace with regex to censor words
var offensiveText = "This is a dumb and silly example.";
var censorPattern = /\bdumb|silly\b/gi;
var censoredText = offensiveText.replace(censorPattern, "****");
console.log("Censored text:", censoredText);

// Validate date format (YYYY-MM-DD)
var dates = "2024-01-01, 20240101, 1999-12-31";
var datePattern = /\b(\d{4})-(\d{2})-(\d{2})\b/g;
var validDates = dates.match(datePattern);
console.log("Valid dates:", validDates);

