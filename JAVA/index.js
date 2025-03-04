const button = document.querySelector(".btn");

  button.addEventListener("mouseover", () => {
      const x = Math.random() * (window.innerWidth - button.clientWidth);
      const y = Math.random() * (window.innerHeight - button.clientHeight);
      button.style.left = `${x}px`;
      button.style.top = `${y}px`;
  })