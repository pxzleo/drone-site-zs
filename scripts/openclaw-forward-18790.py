import socket
import threading

LISTEN_HOST = '0.0.0.0'
LISTEN_PORT = 18790
TARGET_HOST = '127.0.0.1'
TARGET_PORT = 18789


def pipe(src, dst):
    try:
        while True:
            data = src.recv(65536)
            if not data:
                break
            dst.sendall(data)
    except Exception:
        pass
    finally:
        try:
            dst.shutdown(socket.SHUT_WR)
        except Exception:
            pass
        try:
            src.close()
        except Exception:
            pass
        try:
            dst.close()
        except Exception:
            pass


def handle(client_sock):
    target = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    target.connect((TARGET_HOST, TARGET_PORT))
    threading.Thread(target=pipe, args=(client_sock, target), daemon=True).start()
    threading.Thread(target=pipe, args=(target, client_sock), daemon=True).start()


def main():
    srv = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    srv.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
    srv.bind((LISTEN_HOST, LISTEN_PORT))
    srv.listen(128)
    while True:
        client, _ = srv.accept()
        threading.Thread(target=handle, args=(client,), daemon=True).start()


if __name__ == '__main__':
    main()
