from tkinter import *

# def inicio: 
    # corresponde a janela inicial

inicial = Tk()
inicial.title('Menu Principal')

# widget
## textos
l_cadastro = Label(
    inicial
    , text = 'Nova Gestante: '
)
l_busca = Label(
    inicial
    , text = 'Buscar Dados: '
)
l_atendimento = Label(
    inicial
    , text = 'Atendimento: '
)

## botoes
b_cadastro = Button(
    inicial
    , text = 'Entrar'
)
b_busca = Button(
    inicial
    , text = 'Entrar'
)
b_atendimento = Button(
    inicial
    , text = 'Entrar'
)

## imagem
img = PhotoImage(file="../imagem/inicio.png")
l_imagem = Label(inicial, image=img)

# layout
l_cadastro.grid(row = 3, column = 0, sticky = W)
b_cadastro.grid(row = 3, column = 1)
l_busca.grid(row = 4, column = 0, sticky = W)
b_busca.grid(row = 4, column = 1)
l_atendimento.grid(row = 5, column = 0, sticky = W)
b_atendimento.grid(row = 5, column = 1)
l_imagem.grid(row = 0, column = 2, rowspan = 18)

inicial.mainloop()
