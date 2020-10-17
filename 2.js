let input = [19,22,3,28,26,17,18,4,28,0];
let output = input.reduceRight((a, c) => a.concat([c]), []);
console.log(output);