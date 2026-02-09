import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";

export default defineConfig({
  server: {
    port: 5174,
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
  plugins: [liveReload(["**/*.php"])],
});
