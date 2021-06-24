<?php 

  

$info = [
  "sass",                                                  // name of the quiz
  "Kate",                                               // quiz created by ...
  '"/images/sass-logo.png"'                            // path to the image (size of the image width=278px height=341px)
];

$qa = [
  ["Mixins allow you to", [
    ["A. define styles that can be re-used throughout your stylesheet.", 1 ],
    ["B. juggle in the beat and drop the bass.", 0],
    ["C. blend sections of code into one file.", 0]
  ]], 

  ["A top-level statement can only be used...", [
    ["A. at the top level of a stylesheet or nested within a CSS statement", 1], 
    ["B. within the head of an html file", 0],
    ["C. above a php file.", 0]
    ]],

  ["What does @use do for stylesheets?", [
    ["A. It prioritizes one stylesheet over another", 0],
    ["B. It loads mixins, functions, and variables from multiple Sass stylesheets, 
    and combines them together with CSS.", 1],
    ["C. It executes a function in your code.", 0]
  ]],

  ["True or False: The at-rule of @import is recommended over @use.", [
    ["A. True", 0],
    ["B. False", 1],
    ["C. They serve the same function, so true", 0]
  ]],

  ["In Sass, a good example of 'operators' are:",  [
    ["A. @, $, #", 0],
    ["B. &, __, --", 0],
    ["C. ==, +, %, >=", 1]
  ]],

  ["In Sass, '&' is used as a...", [
    ["A. parent selector, used in nested selectors.", 1],
    ["B. pseudo-class selector.", 0],
    ["C. concatenating selector used in combining strings.", 0]
  ]],

  ["Choose the best of the following descriptions. The function of @extend...",  [
    ["A. extends the rules from one selector into another, not copying (like @mixin), but updating the style.", 0],
    ["B. updates the style rules of one selector, passing in the rules of the extended", 0],
    ["C. Both A and B are correct.", 1]
  ]],

  ["The at-rule of @forward...",  [
    ["A. Both B and C are correct.", 1],
    ["B. is written as @forward '<url>'.", 0],
    ["C. loads a Sass stylesheet and makes it possible to organize Sass libraries across many files from a single entry point.", 0]
  ]],

  ["The directive of @content...",  [
    ["A. passes 'Lorem Ipsum' filler text into a paragraph.", 0],
    ["B. passes a block of content into a @mixin.", 1],
    ["C. generates empty content as a page filler.", 0]
  ]],

  ["The @media directive works exactly as in CSS, and it...", [
    ["A. can dictate what type of audio file your browser should use.", 0],
    ["B. it refers to the image, audio, video, and mixed media content on your webpage.", 0],
    ["C. can be used to modify your site or app depending on the viewing device.", 1]
  ]]

];



// $as = [
  
  // [
  //   ["A. define styles that can be re-used throughout your stylesheet.", 1 ],
  //   ["B. juggle in the beat and drop the bass.", 0],
  //   ["C. blend sections of code into one file.", 0]
  // ], 
  
  // [
  // ["A. at the top level of a stylesheet or nested within a CSS statement", 1], 
  // ["B. within the head of an html file", 0],
  // ["C. above a php file.", 0]
  // ],
  
  // [
  //   ["A. It prioritizes one stylesheet over another", 0],
  //   ["B. It loads mixins, functions, and variables from multiple Sass stylesheets, 
  //   and combines them together with CSS.", 1],
  //   ["C. It executes a function in your code.", 0]
  // ],
  
  // [
  //   ["A. True", 0],
  //   ["B. False", 1],
  //   ["C. They serve the same function, so true", 0]
  // ],
  
  // [
  //   ["A. @, $, #", 0],
  //   ["B. &, __, --", 0],
  //   ["C. ==, +, %, >=", 1]
  // ],
  
  // [
  //   ["A. parent selector, used in nested selectors.", 1],
  //   ["B. pseudo-class selector.", 0],
  //   ["C. concatenating selector used in combining strings.", 0]
  // ],
  
  // [
  //   ["A. extends the rules from one selector into another, not copying (like @mixin), but updating the style.", 0],
  //   ["B. updates the style rules of one selector, passing in the rules of the extended", 0],
  //   ["C. Both A and B are correct.", 1]
  // ],
  
  // [
  //   ["A. Both B and C are correct.", 1],
  //   ["B. is written as @forward '<url>'.", 0],
  //   ["C. loads a Sass stylesheet and makes it possible to organize Sass libraries across many files from a single entry point.", 0]
  // ],
  
  // [
  //   ["A. passes 'Lorem Ipsum' filler text into a paragraph.", 0],
  //   ["B. passes a block of content into a @mixin.", 1],
  //   ["C. generates empty content as a page filler.", 0]
  // ],
  
//   [
//     ["A. can dictate what type of audio file your browser should use.", 0],
//     ["B. it refers to the image, audio, video, and mixed media content on your webpage.", 0],
//     ["C. can be used to modify your site or app depending on the viewing device.", 1]
//   ]
// ];

// $hint = [
//   "Mixins are snippets of code",
//   "Examples of top-level statements are: @use, @include, @mixin, and @function",
//   "Stylesheets loaded by @use are called 'modules'. Any styles loaded this way will be included exactly once in the compiled CSS output, no matter how many times those styles are loaded.",
//   "The Sass team discourages the continued use of the @import rule. Sass will gradually phase it out over the next few years, and eventually remove it from the language entirely.",
//   "Operations include the standard mathematical operators like + and *, as well as operators for various other types.",
//   "A parent selector could be replaced by a type selector like h1, so '&' only allowed at the beginning of compound selectors where a type selector would also be allowed",
//   "There are often cases when designing a page when one class should have all the styles of another class, as well as its own specific styles.",
//   "The @forward rule acts just like @use when it comes to a module’s CSS. Styles from a forwarded module will be included in the compiled CSS output, and the module with the @forward can extend it, even if it isn’t also @used.",
//   "In addition to taking arguments, a mixin can take an entire block of styles, known as a content block. A mixin can declare that it takes a content block by including the @content at-rule in its body. The content block is passed in using curly braces like any other block in Sass, and it’s injected in place of the @content rule.",
//   "Sass supports all the at-rules that are part of CSS proper. To stay flexible and forwards-compatible with future versions of CSS, Sass has general support that covers almost all at-rules by default."
// ];

//   $test = [
//     ['This is Question 1', [['Answer1.1', 0], ['Answer1.2', 1], ['Answer1.3', 0]]], //0 //0.1.0, 1.1, 1.2
//     ['This is Question 2', [['Answer2.1', 0], ['Answer2.2', 0], ['Answer2.3', 1]]], //1 //1.1.0, 1.1, 1.2
//     ['This is Question 3', [['Answer3.1', 1], ['Answer3.2', 0], ['Answer3.3', 0]]], //2 //2.1.0, 1.1, 1.2
//     ['This is Question 4', [['Answer4.1', 0], ['Answer4.2', 0], ['Answer4.3', 1]]]  //3 //3.1.0, 1.1, 1.2
//    ];

//    echo $test[0][0] . '<br>';
//    echo $test[0][1][0][0] . '<br>';
//    echo $test[0][1][1][0] . '<br>';
//    echo $test[0][1][2][0] . '<br>';
//    echo $test[1][0] . '<br>';
//    echo $test[1][1][0][0] . '<br>';
//    echo $test[1][1][1][0] . '<br>';
//    echo $test[1][1][2][0] . '<br>';
//    echo $test[2][0] . '<br>';
//    echo $test[2][1][0][0] . '<br>';
//    echo $test[2][1][1][0] . '<br>';
//    echo $test[2][1][2][0] . '<br>';
//    echo $test[3][0] . '<br>';
//    echo $test[3][1][0][0] . '<br>';
//    echo $test[3][1][1][0] . '<br>';
//    echo $test[3][1][2][0] . '<br>';

//  function runTest() {
//     global $test;
//   //   foreach ($test as $question => $value) {
//   //     echo $question . $value;
//     for ($num = 0; $num < 4; $num++) {
//       echo '<div class="qText"><h3> Question ' . $num +1 . '</h3>';
//       echo '<h4>' . $test[$num][0] . '</h4>';
//       echo "<ul>";
      
//         for ($text = 0; $text < 3; $text++) {
//           echo '<div id="aBtn" class="btn-grid">' . $test[$num][1][$text][0] . '</button';
//         }
      
//     echo '</ul>';
//   }
       
//   echo $test[0][0] . '<br>';

//  }
