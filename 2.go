package main

import (
	"fmt"
)

func cetakGambar(panjang int) {
	println(" --- panjang --- ")
	midPanjang := int(panjang / 2)
	// Print Kolom
	for i := 0; i < panjang; i++ {
		// Print Baris
		if i == midPanjang {
			// Print Baris Tengah
			for j := 0; j < panjang; j++ {
				fmt.Print(" * ")
			}
		} else {
			// Print Baris
			for j := 0; j < panjang; j++ {
				if j != 0 && j != panjang-1 {
					fmt.Print(" = ")
				} else {
					fmt.Print(" * ")
				}
			}
		}
		fmt.Print("\n")
	}
}

func main() {
	cetakGambar(1)
}
