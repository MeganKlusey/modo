import { defineConfig } from "vite";

export default defineConfig({
  server: {
    cors: true,
  },
  build: {
    manifest: true,
    emptyOutDir: true,
    outDir: "dist",
    rollupOptions: {
      input: "./src/js/main.js",
    },
  },
});
