// Question 4: Write a C program to validate identifiers and detect if the identifier is C
keywords.
#include <stdio.h>
#include <stdlib.h>
    void
    main()
{
    int i = 0, flag = 0;
    char keyword[32][10] = {"auto", "break", "case", "char", "const", "continue", "default",
                            "do", "double", "else", "enum", "extern", "float", "for", "goto", "if", "int", "long", "register",
                            "return", "short", "signed", "sizeof", "static", "struct", "switch", "typeof", "union", "unsigned",
                            "void", "volatile", "while"};
    int a[10];
    printf("Enter the identifier :");
    gets(a);
    for (i = 0; i < 10; i++)
    {
        if ((strcmp(keyword[i], a) == 0))
        {
            flag = 1;
        }
    }
    if (flag == 1)
    {
        printf("%s is a keyword", a);
    }
    else
        flag = 0;
    if ((a[0] == "_") || (isalpha(a[0] != 0)))
    {
        for (i = 1; a[i] != '\0'; i++)
        {
            if ((isalnum(a[i]) == 0) && (a[i] != '_'))
            {
                flag = 1;
            }
        }
    }
    else
    {
        flag = 1;
    }
    if (flag == 0)
    {
        printf("\n %s is an identifier.", a);
    }
    else
    {
        printf("\n %s is not a valid identifier", a);
    }
    return 0;
}