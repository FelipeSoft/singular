*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${URL}        http://localhost:8000/login.php
${BROWSER}    edge
${USER}       aluno1@example.com
${PASS}       aluno

*** Test Cases ***
Login E Captura
    Open Browser    ${URL}    ${BROWSER}
    Maximize Browser Window

    # Digitar o e-mail
    Input Text    name=email       ${USER}

    # Digitar a senha
    Input Text    name=password    ${PASS}

    # Clicar no botão Entrar
    Click Button    xpath=//button[contains(text(), "Entrar")]

    Sleep    2s
    Capture Page Screenshot    resultado_login.png

    Close Browser
