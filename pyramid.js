const pyramidArr = (arr) => {
  let hello = [];
  for (let i = 0; i < arr.length; i++) {
    hello = [...hello, arr[i]];
    console.log(hello)
  }
}
pyramidArr(["hello", "hello", "hello", "hello", "hello"]);

const pyramidStr = (n) => {
  let hello = "hello";
  for (let i = 0; i < n; i++) {
    hello += " hello";
    console.log(hello)
  }
}
pyramidStr(5);