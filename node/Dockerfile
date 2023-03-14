# Usa uma imagem do Node.js como base
FROM node:14-alpine

# Define o diretório de trabalho dentro do contêiner
WORKDIR /app

# Copia os arquivos do diretório local para dentro do contêiner
COPY package*.json ./

# Instala as dependências do projeto
RUN npm install

# Copia o restante dos arquivos do diretório local para dentro do contêiner
COPY . .

# Expõe a porta 3000 para permitir conexões externas
EXPOSE 3000

# Inicializa o servidor do aplicativo
CMD ["npm", "start"]
