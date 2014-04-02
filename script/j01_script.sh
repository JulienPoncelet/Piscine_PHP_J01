echo "ex03 :\n";
./ex03_main.php > ex03_0_user;
diff ./ex03_0_test ./ex03_0_user;

echo "\nex00 :\n";
../ex00/hw.php > ex00_0_user;
diff ./ex00_0_test ./ex00_0_user;

echo "\nex01 :\n";
../ex01/mlx.php > ex01_0_user;
diff ./ex01_0_test ./ex01_0_user;

echo "\nex02 :\n";
echo "Pliz enter : '42; 0; ; toto; 21; 99cosmos; CTRL-D'\n";
../ex02/oddeven.php > ex02_0_user;
diff ./ex02_0_test ./ex02_0_user;

echo "\nex04 :\n";
../ex04/aff_param.php > ex04_0_user;
../ex04/aff_param.php toto ahah foo bar quax > ex04_1_user;
diff ./ex04_0_test ./ex04_0_user;
diff ./ex04_1_test ./ex04_1_user;


echo "\nex05 :\n";
../ex05/epur_str.php > ex05_0_user;
../ex05/epur_str.php "Salut,     comment ca     va     ?"  > ex05_1_user;
../ex05/epur_str.php "   Hello World    "  > ex05_2_user;
diff ./ex05_0_test ./ex05_0_user;
diff ./ex05_1_test ./ex05_1_user;
diff ./ex05_2_test ./ex05_2_user;

echo "\nex06 :\n";
../ex06/ssap.php > ex06_0_user;
../ex06/ssap.php foo bar > ex06_1_user;
../ex06/ssap.php foo bar "yo man" "A moi compte, deux mots" Xibul > ex06_2_user;
diff ./ex06_0_test ./ex06_0_user;
diff ./ex06_1_test ./ex06_1_user;
diff ./ex06_2_test ./ex06_2_user;

echo "\nex07 :\n";
../ex07/rostring.php > ex07_0_user;
../ex07/rostring.php sdfkjsdkl sdkjfskljdf > ex07_1_user;
../ex07/rostring.php "hello world  aaa" fslkdjf > ex07_2_user;
diff ./ex07_0_test ./ex07_0_user;
diff ./ex07_1_test ./ex07_1_user;
diff ./ex07_2_test ./ex07_2_user;

echo "\nex08 :\n"
./ex08_0_test.php > ex08_0_user

diff ./ex08_0_user ./ex08_0_test


echo "\nex09 :\n"
../ex09/ssap2.php > ex09_0_user
../ex09/ssap2.php toto tutu 4234 "_hop XXX" \#\# "1948372 AhAhAh" > ex09_1_user

diff ./ex09_0_user ./ex09_0_test
diff ./ex09_1_user ./ex09_1_test


echo "\nex10 :\n"
../ex10/do_op.php > ex10_0_user
../ex10/do_op.php 1 + 3 > ex10_1_user
../ex10/do_op.php " 1" " +" " 3" > ex10_2_user
../ex10/do_op.php " 1" " *" " 3" > ex10_3_user
../ex10/do_op.php 42 "% " 3 > ex10_4_user

diff ./ex10_0_user ./ex10_0_test
diff ./ex10_1_user ./ex10_1_test
diff ./ex10_2_user ./ex10_2_test
diff ./ex10_3_user ./ex10_3_test
diff ./ex10_4_user ./ex10_4_test


echo "\nex11 :\n"
../ex11/do_op_2.php > ex11_0_user
../ex11/do_op_2.php toto > ex11_1_user
../ex11/do_op_2.php "42*2" > ex11_2_user
../ex11/do_op_2.php "  42 / 2 " > ex11_3_user
../ex11/do_op_2.php "six6*7sept" > ex11_4_user
../ex11/do_op_2.php '` rm`' > ex11_5_user

diff ./ex11_0_user ./ex11_0_test
diff ./ex11_1_user ./ex11_1_test
diff ./ex11_2_user ./ex11_2_test
diff ./ex11_3_user ./ex11_3_test
diff ./ex11_4_user ./ex11_4_test
diff ./ex11_5_user ./ex11_5_test

rm *user;
