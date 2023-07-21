# t.me/itzinnoprog_bot    бот в тг

# -*- coding: utf-8 -*-
import logging

from aiogram import Bot, Dispatcher, types
from aiogram.contrib.fsm_storage.memory import MemoryStorage
from aiogram.dispatcher.filters.state import State, StatesGroup
from aiogram.types import InlineKeyboardMarkup, InlineKeyboardButton
from aiogram.utils import executor

logging.basicConfig(level=logging.INFO)

bot = Bot(token="6227589469:AAHUG6E586U17UqFP9Rtj_PjLlh7sWRslao")
dp = Dispatcher(bot, storage=MemoryStorage())


class Form(StatesGroup):
    language = State()
    maze = State()


@dp.message_handler(commands=["start"])
async def cmd_start(message: types.Message):
    keyboard = InlineKeyboardMarkup(row_width=1)
    btn1 = InlineKeyboardButton("О нас", callback_data="about")
    btn2 = InlineKeyboardButton("Подписка", url="https://innoprog.ru/#tariff")
    btn3 = InlineKeyboardButton("Игра", url="https://whaile.ru/")
    btn4 = InlineKeyboardButton("Поддержка", callback_data="support")
    keyboard.add(btn1, btn2, btn3, btn4)

    idphoto123 = 'AgACAgIAAxkBAAIBEmS6ac-Ih30Ks12WxZB3TwphnwOaAAKQyzEb3xfZScS8GKI65gkAAQEAAwIAA3gAAy8E'
    await message.reply_photo(idphoto123)

    await message.answer("Выберите действие:", reply_markup=keyboard)


@dp.callback_query_handler(text="about")
async def process_callback_about(callback_query: types.CallbackQuery):
    await bot.send_message(callback_query.from_user.id,
                           "Мы - талантливая команда разработчиков. Одной из наших недавних разработок является захватывающая игра, созданная специально для INNOPROG.\n\n"
                           "Наша игра разработана с особым вниманием к тому, чтобы привлечь новых клиентов и заинтересовать уже существующую аудиторию. \n\n Она стала уникальным инструментом в привлечении внимания к вашему бренду и продуктам."
                           "Для создания нашей игры мы выбрали платформу Unity. \n\n Unity - это мощный и гибкий инструмент, который позволяет нам реализовать самые амбициозные идеи и воплотить их в жизнь. Это позволяет нам обеспечивать высокое качество графики и плавную анимацию, чтобы наши пользователи получали удовольствие от каждой секунды игрового процесса.\n\n"
                           "Мы понимаем, что время - это ценный ресурс, поэтому наша игра была разработана так, чтобы не занимать много времени. Независимо от занятости наших пользователей, они могут наслаждаться игрой в удобное для себя время, получая удовольствие и принося удовлетворение от каждого прошедшего уровня.\n\n"
                           "Мы гордимся своей работой и стремимся к достижению новых высот в области разработки игр. Надеемся, что наша игра понравится вам и станет яркой частью вашего уникального опыта с INNOPROG. Мы всегда рады вашим отзывам и готовы реализовать любые ваши идеи. Приходите и окунитесь в захватывающий мир нашей игры!\n\n")


@dp.callback_query_handler(text="support")
async def process_callback_about(callback_query: types.CallbackQuery):
    await bot.send_message(callback_query.from_user.id, f"Контакты: \n +7 993 409-90-57 \n education@innoprog.ru")


@dp.message_handler(content_types=['photo'])
async def handle_photo(message: types.Message):
    id_photo = message.photo[-1].file_id
    await message.answer_photo(id_photo)
    print(id_photo)


if __name__ == "__main__":
    executor.start_polling(dp, skip_updates=True)
