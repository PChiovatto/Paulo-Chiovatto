# Página estática servida por nginx. Funciona no Coolify com o build pack
# "Dockerfile"; com o build pack "Static" este arquivo é simplesmente ignorado.
FROM nginx:alpine

COPY index.html /usr/share/nginx/html/index.html

EXPOSE 80
