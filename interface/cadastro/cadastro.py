from tkinter import *

# def inicio: 
    # corresponde a janela cadastro

janela = Tk()
janela.title('Cadastro')

# widget
## textos obrigatorios
l_nome = Label(
    janela
    , text = 'Nome:*'
)
l_cpf = Label(
    janela
    , text = 'CPF:*'
)
l_idade_gestacional_semana = Label(
    janela
    , text = 'Idade Gestacional Semanas:*'
)
l_idade_gestacional_dia = Label(
    janela
    , text = 'Idade Gestacional em Dias:*'
)
l_modelo = Label(
    janela
    , text = 'Modelo:*'
)

## textos opcionais
l_idade = Label(
    janela
    , text = 'Idade:'
)
l_endereco = Label(
    janela
    , text = 'Endereco:'
)
l_altura = Label(
    janela
    , text = 'Altura:'
)
l_peso = Label(
    janela
    , text = 'Peso:'
)

## entry fields
e_nome = Entry(
    janela
    , width = 40
)
e_cpf = Entry(
    janela
    , width = 40
)
e_idade_gestacional_semana = Entry(
    janela
    , width = 40
)
e_idade_gestacional_dia = Entry(
    janela
    , width = 40
)

## Entry optional
e_idade = Entry(
    janela
    , width = 40
)
e_endereco = Entry(
    janela
    , width = 40
)
e_altura = Entry(
    janela
    , width = 40
)
e_peso = Entry(
    janela
    , width = 40
)

## radio button
valor_a = IntVar()
valor_a.set(1)
r_modelo_dum = Radiobutton(janela, text = 'DUM', variable = valor_a, value = 1)
r_modelo_ultrassom = Radiobutton(janela, text = 'Ultrassom', variable = valor_a, value = 2)

## button
b_salvar = Button(
    janela
    , text = 'Salvar'
)

# layout
## obrigatorios
l_nome.grid(row = 3, column = 0, sticky = W)
e_nome.grid(row = 4, column = 0, sticky = W, columnspan=2)
l_cpf.grid(row = 5, column = 0, sticky = W)
e_cpf.grid(row = 6, column = 0, sticky = W, columnspan=2)
l_idade_gestacional_semana.grid(row = 7, column = 0, sticky = W)
e_idade_gestacional_semana.grid(row = 8, column = 0, sticky = W, columnspan=2)
l_idade_gestacional_dia.grid(row = 9, column = 0, sticky = W)
e_idade_gestacional_dia.grid(row = 10, column = 0, sticky = W, columnspan=2)
l_modelo.grid(row = 11, column = 0, sticky = W)
r_modelo_dum.grid(row = 12, column = 0)
r_modelo_ultrassom.grid(row = 12, column = 1)

## opcionais
l_idade.grid(row = 13, column = 0, sticky = W)
e_idade.grid(row = 14, column = 0, sticky = W, columnspan=2)
l_endereco.grid(row = 15, column = 0, sticky = W)
e_endereco.grid(row = 16, column = 0, sticky = W, columnspan=2)
l_altura.grid(row = 17, column = 0, sticky = W)
e_altura.grid(row = 18, column = 0, sticky = W, columnspan=2)
l_peso.grid(row = 19, column = 0, sticky = W)
e_peso.grid(row = 20, column = 0, sticky = W, columnspan=2)

b_salvar.grid(row = 21, column = 1)

janela.mainloop()
