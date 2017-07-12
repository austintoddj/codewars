//
//  simple-multiplication.swift
//  This kata is about multiplying a given number by eight if it is an even number and by nine otherwise.
//
//  Created by Todd Austin on 7/12/17.
//  Copyright © 2017 Todd Austin. All rights reserved.
//

func simpleMultiplication(_ num: Int) -> Int {
    return num * (num % 2 == 0 ? 8 : 9)
}