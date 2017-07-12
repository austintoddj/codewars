/**
 * Given an array, find the int that appears an odd number of times.
 * There will always be only one integer that appears an odd number of times.
 *
 * @param {array}
 *
 * @return {number}
 */

function findOdd(A) {
    var obj = {};
    A.forEach(function(el){
        obj[el] ? obj[el]++ : obj[el] = 1;
    });

    for(prop in obj) {
        if(obj[prop] % 2 !== 0) return Number(prop);
    }
}